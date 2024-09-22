<div class="volunteer-form-container">
    <h2>Create New Volunteer</h2>
    <form id="volunteerForm" enctype="multipart/form-data">
        <div class="alert-message" id="form-alert-message"></div>
        
        <label for="volunteerName">Volunteer Name:</label>
        <input type="text" id="volunteerName" name="name" placeholder="Enter Volunteer Name" class="input-field" required>

        <label for="volunteerInfo">Info:</label>
        <textarea id="volunteerInfo" name="info" placeholder="Write New Info" class="text-field" required></textarea>

        <label for="volunteerImage">Image:</label>
        <input type="file" id="volunteerImage" name="file" accept="image/*" class="file-input" required>

        <label for="volunteerFacebook">Facebook:</label>
        <input type="url" id="volunteerFacebook" name="facebook" placeholder="Enter Facebook URL" class="input-field">

        <label for="volunteerPinterest">Pinterest:</label>
        <input type="url" id="volunteerPinterest" name="pinterest" placeholder="Enter Pinterest URL" class="input-field">

        <label for="volunteerLinkedIn">LinkedIn:</label>
        <input type="url" id="volunteerLinkedIn" name="linkedin" placeholder="Enter LinkedIn URL" class="input-field">

        <label for="volunteerTwitter">Twitter:</label>
        <input type="url" id="volunteerTwitter" name="twitter" placeholder="Enter Twitter URL" class="input-field">

        <button type="submit" class="primary-btn">Create Volunteer</button>
    </form>
</div>

<script>
    document.getElementById("volunteerForm").addEventListener("submit", function (event) {
        event.preventDefault();
        
        document.getElementById('form-alert-message').textContent = '';

        const formData = new FormData(this);
        const createdDate = new Date().toISOString().split('T')[0];
        formData.append('date', createdDate);

        fetch('http://127.0.0.1:8000/api/volunteer', {
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
            console.log('Volunteer created successfully:', data);
            alert('Volunteer created successfully!');
            this.reset();
            location.reload();
        })
        .catch(error => {
            console.error('Error occurred:', error);
            document.getElementById('form-alert-message').textContent = 'An error occurred. Please try again.';
        });
    });

    function resetVolunteerForm() {
        document.getElementById("volunteerForm").reset();
        document.getElementById('form-alert-message').textContent = '';
    }
</script>

<div class="volunteer-list" style="width: 100%; margin-top: 7%; display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="editVolunteerPopup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit Volunteer</h3>
        <form id="editVolunteerForm" enctype="multipart/form-data">
            <label for="editVolunteerName">Name</label>
            <input type="text" id="editVolunteerName" name="name" required><br><br>

            <label for="editVolunteerInfo">Description:</label>
            <textarea id="editVolunteerInfo" name="info" required></textarea><br><br>

            <label for="editVolunteerImage">Image:</label>
            <input type="file" id="editVolunteerImage" name="file"><br><br>

            <label for="editVolunteerFacebook">Facebook:</label>
            <input type="url" id="editVolunteerFacebook" name="facebook"><br><br>

            <label for="editVolunteerPinterest">Pinterest:</label>
            <input type="url" id="editVolunteerPinterest" name="pinterest"><br><br>

            <label for="editVolunteerLinkedIn">LinkedIn:</label>
            <input type="url" id="editVolunteerLinkedIn" name="linkedin"><br><br>

            <label for="editVolunteerTwitter">Twitter:</label>
            <input type="url" id="editVolunteerTwitter" name="twitter"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    // On page load
    document.addEventListener('DOMContentLoaded', () => {
        // Fetch volunteer data from the API
        fetch('http://127.0.0.1:8000/api/volunteer')
            .then(response => response.json())
            .then(data => {
                console.log('Data fetched:', data);
                const container = document.querySelector('.volunteer-list');

                if (!container) {
                    console.error('Element with class "volunteer-list" not found.');
                    return;
                }

                const items = data.Volunteer; // Get volunteer data
                items.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'single-volunteer';
                    div.innerHTML = `
                        <div class="volunteer-thumbnail">
                            <img src="${item.imgUrl}" alt="Volunteer"/>
                        </div>
                        <div class="volunteer-details">
                            <div class="social-links">
                                <ul>
                                    <li><a href="${item.facebook}"> <i class="fab fa-facebook"></i> </a></li>
                                    <li><a href="${item.pinterest}"> <i class="fab fa-pinterest"></i> </a></li>
                                    <li><a href="${item.linkedin}"> <i class="fab fa-linkedin"></i> </a></li>
                                    <li><a href="${item.twitter}"> <i class="fab fa-twitter"></i> </a></li>
                                </ul>
                            </div>
                            <div class="info-inner">
                                <h4>${item.name}</h4>
                                <p>${item.info}</p>
                            </div>
                            <div class="edit-delete-buttons">
                                <button class="editVolunteerBtn" data-id="${item.id}" data-name="${item.name}" data-info="${item.info}" data-facebook="${item.facebook}" data-pinterest="${item.pinterest}" data-linkedin="${item.linkedin}" data-twitter="${item.twitter}" onclick="openEditVolunteerPopup(this)">Edit</button>
                                <button class="deleteVolunteerBtn" data-id="${item.id}" onclick="removeVolunteer(this)">Delete</button>
                            </div>
                        </div>
                    `;
                    container.appendChild(div);
                });
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });

    // Open edit popup
    function openEditVolunteerPopup(button) {
        const postId = button.getAttribute('data-id');
        document.getElementById("editVolunteerName").value = button.getAttribute('data-name');
        document.getElementById("editVolunteerInfo").value = button.getAttribute('data-info');
        document.getElementById("editVolunteerFacebook").value = button.getAttribute('data-facebook');
        document.getElementById("editVolunteerPinterest").value = button.getAttribute('data-pinterest');
        document.getElementById("editVolunteerLinkedIn").value = button.getAttribute('data-linkedin');
        document.getElementById("editVolunteerTwitter").value = button.getAttribute('data-twitter');
        document.getElementById("editVolunteerImage").value = '';

        editVolunteerPopup.style.display = "block";

        document.querySelectorAll('.editVolunteerBtn').forEach(btn => btn.classList.add('hidden'));
        document.querySelectorAll('.deleteVolunteerBtn').forEach(btn => btn.classList.add('hidden'));

        // Set the id in a hidden property
        document.getElementById("editVolunteerForm").dataset.id = postId;
    }

    // Close popup
    const editVolunteerPopup = document.getElementById("editVolunteerPopup");
    const closeBtn = document.getElementsByClassName("close")[0];

    closeBtn.onclick = function() {
        editVolunteerPopup.style.display = "none";
        document.querySelectorAll('.editVolunteerBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.deleteVolunteerBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.getElementById("editVolunteerForm").reset();
    };

    window.onclick = function(event) {
        if (event.target == editVolunteerPopup) {
            editVolunteerPopup.style.display = "none";
            document.getElementById("editVolunteerForm").reset();
            document.querySelectorAll('.editVolunteerBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
            document.querySelectorAll('.deleteVolunteerBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        }
    };

    // On form submit
    document.getElementById("editVolunteerForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        const postId = this.dataset.id; // Get the post id

        if (postId) {
            formData.append('_method', 'PUT'); // For PUT request
            fetch(`http://127.0.0.1:8000/api/volunteer/${postId}`, {
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
                console.log('Volunteer updated successfully:', data);
                alert('Volunteer updated successfully!');
                editVolunteerPopup.style.display = "none";
                location.reload();
            })
            .catch(error => {
                console.error('Error occurred:', error);
                alert('An error occurred. Please try again.');
            });
        }
    });

    // Delete volunteer function
    function removeVolunteer(button) {
        const postId = button.getAttribute('data-id');
        if (confirm('Are you sure you want to delete this volunteer?')) {
            fetch(`http://127.0.0.1:8000/api/volunteer/${postId}`, {
                method: 'DELETE'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Volunteer deleted successfully:', data);
                alert('Volunteer deleted successfully!');
                location.reload();
            })
            .catch(error => {
                console.error('Error occurred:', error);
                alert('An error occurred. Please try again.');
            });
        }
    }
</script>
