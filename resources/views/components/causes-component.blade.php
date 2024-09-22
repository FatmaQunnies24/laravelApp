<div class="creative_blog-form-wrapper">
    <h2>Create New Cause</h2>
    <form id="createCauseForm" enctype="multipart/form-data">
        <div class="alert-message" id="alert-message"></div>

        <label for="newName">Cause Name:</label>
        <input type="text" id="newName" name="name" placeholder="Enter Cause Name" class="input-field" required>

        <label for="newRaised">Amount Raised:</label>
        <input type="text" id="newRaised" name="raised" placeholder="Enter Amount Raised" class="input-field" required>

        <label for="newGoal">Goal:</label>
        <input type="text" id="newGoal" name="goal" placeholder="Enter Goal" class="input-field" required>

        <label for="newPre">Progress:</label>
        <input type="text" id="newPre" name="pre" placeholder="Enter Progress Percentage" class="input-field" required>

        <label for="newImage">Image:</label>
        <input type="file" id="newImage" name="file" accept="image/*" class="file-input" required>

        <label for="newSmallDisc">Small Description:</label>
        <textarea id="newSmallDisc" name="smallDisc" placeholder="Enter Small Description" class="text-field" required></textarea>

        <label for="newDescription">Description:</label>
        <textarea id="newDescription" name="desc" placeholder="Enter Full Description" class="text-field" required></textarea>

        <button type="submit" class="primary-btn">Create Cause</button>
    </form>
</div>

<script>
document.getElementById("createCauseForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    document.getElementById('alert-message').textContent = '';

    const formData = new FormData(this);

    fetch('http://127.0.0.1:8000/api/causes', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Cause created successfully:', data);
        alert('Cause created successfully!');
        this.reset();
    })
    .catch(error => {
        console.error('Error occurred:', error);
        document.getElementById('alert-message').textContent = 'An error occurred. Please try again.';
    });
});
</script>

<div class="causes-container" id="causesContainer"></div>

<div class="modal fade" id="editCauseModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Cause</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCauseForm">
                    <input type="hidden" id="editCauseId">
                    <div class="form-group">
                        <label for="editCauseName">Name</label>
                        <input type="text" class="form-control" id="editCauseName" required>
                    </div>
                    <div class="form-group">
                        <label for="editCauseRaised">Raised</label>
                        <input type="text" class="form-control" id="editCauseRaised" required>
                    </div>
                    <div class="form-group">
                        <label for="editCauseGoal">Goal</label>
                        <input type="text" class="form-control" id="editCauseGoal" required>
                    </div>
                    <div class="form-group">
                        <label for="editCauseProgress">Progress</label>
                        <input type="text" class="form-control" id="editCauseProgress" required>
                    </div>
                    <div class="form-group">
                        <label for="editCauseSmallDisc">Small Description</label>
                        <input type="text" class="form-control" id="editCauseSmallDisc" required>
                    </div>
                    <div class="form-group">
                        <label for="editCauseDesc">Description</label>
                        <textarea class="form-control" id="editCauseDesc" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editCauseImage">Image</label>
                        <input type="file" class="form-control" id="editCauseImage">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function loadCauses() {
        fetch('http://127.0.0.1:8000/api/causes')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
                if (data.status && Array.isArray(data.Causes)) {
                    const container = document.getElementById('causesContainer');
                    container.innerHTML = ''; // Clear container before loading new causes
                    data.Causes.forEach(cause => {
                        const causeElement = document.createElement('div');
                        causeElement.className = 'single_cause';
                        causeElement.setAttribute('key', cause.id);
                        causeElement.innerHTML = `
                            <div class="thumb">
                                <img src="${cause.imgUrl}" alt=""/>
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: ${cause.pre};" aria-valuenow="${cause.pre}" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">${cause.pre}</span>
                                        </div> 
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>${cause.raised}</span>
                                    <span>${cause.goal}</span>
                                </div>
                                <h4>${cause.name}</h4>
                                <p>${cause.smallDisc}</p>
                                <button class="editCauseBtn btn btn-warning" data-toggle="modal" data-target="#editCauseModal" data-id="${cause.id}" data-name="${cause.name}" data-raised="${cause.raised}" data-goal="${cause.goal}" data-pre="${cause.pre}" data-smalldisc="${cause.smallDisc}" data-desc="${cause.desc}" data-imgurl="${cause.imgUrl}">Edit</button>
                                <button class="deleteCauseBtn btn btn-danger" data-id="${cause.id}">Delete</button>
                            </div>
                        `;
                        
                        container.appendChild(causeElement);
                    });

                    document.querySelectorAll('.editCauseBtn').forEach(button => {
                        button.addEventListener('click', function() {
                            const id = this.getAttribute('data-id');
                            document.getElementById('editCauseId').value = id;
                            document.getElementById('editCauseName').value = this.getAttribute('data-name');
                            document.getElementById('editCauseRaised').value = this.getAttribute('data-raised');
                            document.getElementById('editCauseGoal').value = this.getAttribute('data-goal');
                            document.getElementById('editCauseProgress').value = this.getAttribute('data-pre');
                            document.getElementById('editCauseSmallDisc').value = this.getAttribute('data-smalldisc');
                            document.getElementById('editCauseDesc').value = this.getAttribute('data-desc');
                            document.getElementById('editCauseModal').classList.add('show');
                        });
                    });

                    document.querySelectorAll('.deleteCauseBtn').forEach(button => {
                        button.addEventListener('click', function() {
                            const id = this.getAttribute('data-id');
                            if (confirm('Are you sure you want to delete this cause?')) {
                                deleteCause(id);
                            }
                        });
                    });
                } else {
                    console.error('Unexpected data format:', data);
                }
            })
            .catch(error => console.error('Error fetching causes:', error));
    }

    function deleteCause(id) {
        fetch(`http://127.0.0.1:8000/api/causes/${id}`, {
            method: 'DELETE',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                alert('Cause deleted successfully!');
                loadCauses();
            } else {
                console.error('Failed to delete cause:', data);
            }
        })
        .catch(error => console.error('Error deleting cause:', error));
    }

    loadCauses();
});

document.getElementById('editCauseForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const id = document.getElementById('editCauseId').value;
    const updatedData = {
        name: document.getElementById('editCauseName').value,
        raised: document.getElementById('editCauseRaised').value,
        goal: document.getElementById('editCauseGoal').value,
        pre: document.getElementById('editCauseProgress').value,
        smallDisc: document.getElementById('editCauseSmallDisc').value,
        desc: document.getElementById('editCauseDesc').value,
        // Add image data if needed
    };

    fetch(`http://127.0.0.1:8000/api/causes/${id}`, {
        method: 'PUT',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(updatedData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            alert('Cause updated successfully!');
            $('#editCauseModal').modal('hide');
            loadCauses();
        } else {
            console.error('Failed to update cause:', data);
        }
    })
    .catch(error => console.error('Error updating cause:', error));
});
</script>
