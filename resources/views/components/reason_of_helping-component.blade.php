<div class="creative_blog-form-wrapper">
    <h2>Create New Reason of Helping</h2>
    <form id="newReasonForm" enctype="multipart/form-data">
        <div class="alert-message" id="alert-message"></div>
        
        <label for="newName">Reason Name:</label>
        <input type="text" id="newName" name="name" placeholder="Enter Reason Name" class="input-field" required>

        <label for="newDescription">Description:</label>
        <textarea id="newDescription" name="desc" placeholder="Enter Description" class="text-field" required></textarea>

        <label for="newImage">Image:</label>
        <input type="file" id="newImage" name="file" accept="image/*" class="file-input" required>

        <button type="submit" class="primary-btn">Create Reason</button>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const popup = document.querySelector('.popup');
    popup.style.display = 'none'; // تأكد من إخفائها عند تحميل الصفحة
});
document.getElementById("newReasonForm").addEventListener("submit", function(event) {
    event.preventDefault();
    document.getElementById('alert-message').textContent = '';
    const formData = new FormData(this);
    const createdDate = new Date().toISOString().split('T')[0];
    formData.append('created_at', createdDate);

    fetch('http://127.0.0.1:8000/api/posts', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(err => { throw new Error(err.message); });
        }
        return response.json();
    })
    .then(data => {
        console.log('Reason created successfully:', data);
        alert('Reason created successfully!');
        this.reset();
        location.reload();
    })
    .catch(error => {
        console.error('Error occurred:', error);
        document.getElementById('alert-message').textContent = error.message || 'An error occurred. Please try again.';
    });
});

function clearForm() {
    document.getElementById("newReasonForm").reset();
    document.getElementById('alert-message').textContent = '';
}
</script>

<div class="reson_area_area" style="width: 100%; margin-left: 15%; display: flex; gap: 10px; flex-wrap: wrap;">
</div>

<div id="editPopup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit Post</h3>
        <form id="editForm">
            <input type="hidden" id="editPostId" name="id">
            <label for="editName">Name:</label>
            <input type="text" id="editName" name="name" required><br><br>
            
            <label for="editDesc">Description:</label>
            <textarea id="editDesc" name="desc" required></textarea><br><br>
            
            <label for="editImg">Image:</label>
            <input type="file" id="editImg" name="file"><br><br>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    fetch('http://127.0.0.1:8000/api/posts')
        .then(response => response.json())
        .then(data => {
            console.log('Data fetched:', data);
            const container = document.querySelector('.reson_area_area');

            if (!container) {
                console.error('Element with class "reson_area_area" not found.');
                return;
            }

            const items = data.reason_of_helping;
            items.forEach(item => {
                const div = document.createElement('div');
                div.className = 'single_reson';
                div.innerHTML = `
                    <div class="thume">
                        <div class="thum_1e">
                            <img src="${item.imgUrl}" alt="${item.name}" />
                        </div>
                    </div>
                    <div class="help_contente">
                        <button class="editBtn" data-id="${item.id}" data-name="${item.name}" data-desc="${item.desc}" data-imgUrl="${item.imgUrl}" onclick="showEditPopup(this)">Edit</button>
                        <button class="deleteBtn" data-id="${item.id}" onclick="removePost(this)">Delete</button>
                        <h4>${item.name}</h4>
                        <p>
                            ${item.desc.length > 100 ? 
                            `<span class="description-preview">${item.desc.substring(0, 100)}...</span>
                             <span class="read_more" onclick="toggleDescription(this, '${item.desc}')">Read More</span>` 
                            : item.desc}
                        </p>
                        <a href="/ReadMore">Read More</a>
                    </div>
                `;
                container.appendChild(div);
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

    const popup = document.getElementById("editPopup");
    const closeBtn = document.getElementsByClassName("close")[0];

    closeBtn.onclick = function() {
        popup.style.display = "none";
        document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
            document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
            document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        }
    }

    document.getElementById("editForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        const postId = document.getElementById("editPostId").value;  
        if (postId) {
            formData.append("id", postId);
            fetch(`http://127.0.0.1:8000/api/posts/${postId}`, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => { throw new Error(err.message); });
                }
                return response.json();
            })
            .then(data => {
                console.log('Success:', data);
                location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('alert-message').textContent = error.message || 'An error occurred. Please try again.';
            });
        } else {
            console.error('No post ID specified.');
        }

        popup.style.display = "none";
        document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
    });
});

function toggleDescription(element, fullDesc) {
    const paragraph = element.previousElementSibling;
    if (element.textContent === 'Read More') {
        paragraph.textContent = fullDesc;
        element.textContent = 'Show Less';
    } else {
        paragraph.textContent = paragraph.textContent.substring(0, 100) + '...';
        element.textContent = 'Read More';
    }
}

function showEditPopup(button) {
    const postId = button.getAttribute('data-id');
    document.getElementById("editName").value = button.getAttribute('data-name');
    document.getElementById("editDesc").value = button.getAttribute('data-desc');
    document.getElementById("editImg").value = ''; 
    document.getElementById("editPostId").value = postId;  
    document.getElementById("editPopup").style.display = "block";

    document.querySelectorAll('.editBtn').forEach(btn => btn.classList.add('hidden'));
    document.querySelectorAll('.deleteBtn').forEach(btn => btn.classList.add('hidden'));
}

function removePost(button) {
    const postId = button.getAttribute('data-id');
    if (confirm('Are you sure you want to delete this post?')) {
        fetch(`http://127.0.0.1:8000/api/posts/${postId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw new Error(err.message); });
            }
            return response.json();
        })
        .then(data => {
            console.log('Post deleted:', data);
            location.reload();
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('alert-message').textContent = error.message || 'An error occurred. Please try again.';
        });
    }
}
</script>
