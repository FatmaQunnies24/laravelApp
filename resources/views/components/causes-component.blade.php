<div class="creative_blog-form-wrapper">
    <h2>Create New Cause</h2>
    <form id="newCauseForm" enctype="multipart/form-data">
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
document.getElementById("newCauseForm").addEventListener("submit", function(event) {
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

<div class="causes-container" id="causes-container"></div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Cause</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="edit_id">
                    <div class="form-group">
                        <label for="edit_name">Name</label>
                        <input type="text" class="form-control" id="edit_name">
                    </div>
                    <div class="form-group">
                        <label for="edit_raised">Raised</label>
                        <input type="text" class="form-control" id="edit_raised">
                    </div>
                    <div class="form-group">
                        <label for="edit_goal">Goal</label>
                        <input type="text" class="form-control" id="edit_goal">
                    </div>
                    <div class="form-group">
                        <label for="edit_pre">Progress</label>
                        <input type="text" class="form-control" id="edit_pre">
                    </div>
                    <div class="form-group">
                        <label for="edit_smallDisc">Small Description</label>
                        <input type="text" class="form-control" id="edit_smallDisc">
                    </div>
                    <div class="form-group">
                        <label for="edit_desc">Description</label>
                        <textarea class="form-control" id="edit_desc" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_imgUrl">Image</label>
                        <input type="file" class="form-control" id="edit_imgUrl">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
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
                const container = document.getElementById('causes-container');
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
                                    <div class="progress-bar" role="progressbar" style="width: ${cause.pre};" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
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
                            <button class="edit_button btn btn-warning" data-toggle="modal" data-target="#editModal" data-id="${cause.id}" data-name="${cause.name}" data-raised="${cause.raised}" data-goal="${cause.goal}" data-pre="${cause.pre}" data-smalldisc="${cause.smallDisc}" data-desc="${cause.desc}" data-imgurl="${cause.imgUrl}">Edit</button>
                            <button class="delete_button btn btn-danger" data-id="${cause.id}">Delete</button>
                        </div>
                    `;
                    
                    container.appendChild(causeElement);
                });

                document.querySelectorAll('.edit_button').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        document.getElementById('edit_id').value = id;
        document.getElementById('edit_name').value = this.getAttribute('data-name');
        document.getElementById('edit_raised').value = this.getAttribute('data-raised');
        document.getElementById('edit_goal').value = this.getAttribute('data-goal');
        document.getElementById('edit_pre').value = this.getAttribute('data-pre');
        document.getElementById('edit_smallDisc').value = this.getAttribute('data-smalldisc');
        document.getElementById('edit_desc').value = this.getAttribute('data-desc');
        document.getElementById('editModal').classList.add('popup');
    });
});


                document.querySelectorAll('.delete_button').forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.getAttribute('data-id');
                        if (confirm('Are you sure you want to delete this cause?')) {
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
                                    location.reload();
                                } else {
                                    console.error('Failed to delete cause:', data);
                                }
                            })
                            .catch(error => console.error('Error deleting cause:', error));
                        }
                    });
                });
            } else {
                console.error('Unexpected data format:', data);
            }
        })
        .catch(error => console.error('Error fetching causes:', error));
});

document.getElementById('editForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const id = document.getElementById('edit_id').value;
    const formData = new FormData(); 

    formData.append('name', document.getElementById('edit_name').value);
    formData.append('raised', document.getElementById('edit_raised').value);
    formData.append('goal', document.getElementById('edit_goal').value);
    formData.append('pre', document.getElementById('edit_pre').value);
    formData.append('smallDisc', document.getElementById('edit_smallDisc').value);
    formData.append('desc', document.getElementById('edit_desc').value);

    const fileInput = document.getElementById('edit_imgUrl');
    if (fileInput.files.length > 0) {
        formData.append('file', fileInput.files[0]); 
    }

    fetch(`http://127.0.0.1:8000/api/causes/${id}`, {
        method: 'POST',
        body: formData 
    })
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            alert('Cause updated successfully!');
            location.reload();
        } else {
            console.error('Failed to update cause:', data);
        }
    })
    .catch(error => console.error('Error updating cause:', error));
});

</script>