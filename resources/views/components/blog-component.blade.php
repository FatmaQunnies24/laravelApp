<div class="bobo_form-container">
    <h2>Create New Blog</h2>
    <form id="boboCreateBlogForm" enctype="multipart/form-data">
        <div class="bobo-error-message" id="bobo-error-message"></div>
        
        <label for="boboName">Blog Name:</label>
        <input type="text" id="boboName" name="name" placeholder="Enter blog name" required>

        <label for="boboDescription">Description:</label>
        <textarea id="boboDescription" name="disc" placeholder="Write blog description" required></textarea>

        <label for="boboStyle">Style:</label>
        <input type="text" id="boboStyle" name="style" placeholder="Enter blog style" required>

        <label for="boboImage">Image:</label>
        <input type="file" id="boboImage" name="file" accept="image/*" required>

        <button type="submit" class="bobo-submit-btn">Create Blog</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {});

    document.getElementById("boboCreateBlogForm").addEventListener("submit", function (event) {
        event.preventDefault();
        
        document.getElementById('bobo-error-message').textContent = '';

        const formData = new FormData(this);
        const createdDate = new Date().toISOString().split('T')[0];
        formData.append('date', createdDate);

        fetch('http://127.0.0.1:8000/api/blog', {
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
            console.log('Blog created successfully:', data);
            alert('Blog created successfully!');
            this.reset();
            location.reload();
        })
        .catch(error => {
            console.error('Error occurred:', error);
            document.getElementById('bobo-error-message').textContent = 'An error occurred. Please try again.';
        });
    });

    function clearBoboCreateBlogForm() {
        document.getElementById("boboCreateBlogForm").reset();
        document.getElementById('bobo-error-message').textContent = '';
    }
</script>

<div class="bobo_blog__area" style="width: 100%; display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="boboEditPopup" class="bobo-popup" style="display: none;">
    <div class="bobo-popup-content">
        <span class="bobo-close">&times;</span>
        <h3>Edit Blog</h3>
        <form id="boboEditForm" enctype="multipart/form-data">
            <label for="boboEditName">Name:</label>
            <input type="text" id="boboEditName" name="name" required><br><br>

            <label for="boboEditDesc">Description:</label>
            <textarea id="boboEditDesc" name="disc" required></textarea><br><br>

            <label for="boboEditStyle">Style:</label>
            <input type="text" id="boboEditStyle" name="style" required><br><br>

            <label for="boboEditDate">Date:</label>
            <input type="date" id="boboEditDate" name="date" required><br><br>

            <label for="boboEditImg">Image:</label>
            <input type="file" id="boboEditImg" name="file"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        fetch('http://127.0.0.1:8000/api/blog')
            .then(response => response.json())
            .then(data => {
                const container = document.querySelector('.bobo_blog__area');
                if (!container) {
                    console.error('Element with class "bobo_blog__area" not found.');
                    return;
                }

                const items = data.Blog;
                items.forEach((blog) => {
                    const div = document.createElement('div');
                    div.className = 'bobo_blog_item';
                    div.style = "width: 30%; border: 1px solid #ccc; padding: 10px;";

                    div.innerHTML = `
                        <div class="bobo_blog_item_img">
                            <img src="${blog.imgUrl}" alt="${blog.name}" style="width: 100%; height: auto;">
                        </div>
                        <div class="bobo_blog_details">
                            <h2>${blog.name}</h2>
                            <p>${blog.disc}</p>
                            <p><strong>Style:</strong> ${blog.style}</p>
                            <p><strong>Date:</strong> ${new Date(blog.date).toDateString()}</p>
                        </div>
                        <button class="bobo_editBtn" data-id="${blog.id}" data-name="${blog.name}" data-info="${blog.disc}" data-style="${blog.style}" data-date="${blog.date}">Edit</button>
                        <button class="bobo_deleteBtn" data-id="${blog.id}">Delete</button>
                    `;

                    container.appendChild(div);
                });

                document.querySelectorAll('.bobo_editBtn').forEach(button => {
                    button.addEventListener('click', () => showBoboEditPopup(button));
                });

                document.querySelectorAll('.bobo_deleteBtn').forEach(button => {
                    button.addEventListener('click', () => deleteBoboPost(button));
                });
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });

    function showBoboEditPopup(button) {
        const postId = button.getAttribute('data-id');
        document.getElementById("boboEditName").value = button.getAttribute('data-name');
        document.getElementById("boboEditDesc").value = button.getAttribute('data-info');
        document.getElementById("boboEditStyle").value = button.getAttribute('data-style');
        
        const dateValue = new Date(button.getAttribute('data-date')).toISOString().split('T')[0];
        document.getElementById("boboEditDate").value = dateValue;
        
        document.getElementById("boboEditImg").value = '';

        const popup = document.getElementById("boboEditPopup");
        popup.style.display = "block";
        document.getElementById("boboEditForm").dataset.id = postId;
    }

    const boboCloseBtn = document.getElementsByClassName("bobo-close")[0];
    boboCloseBtn.onclick = function() {
        const popup = document.getElementById("boboEditPopup");
        popup.style.display = "none";
        clearBoboEditPopup();
    };

    window.onclick = function(event) {
        const popup = document.getElementById("boboEditPopup");
        if (event.target == popup) {
            popup.style.display = "none";
            clearBoboEditPopup();
        }
    };

    function clearBoboEditPopup() {
        document.getElementById("boboEditForm").reset();
    }

    document.getElementById("boboEditForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        const postId = this.dataset.id; 

        if (postId) {
            fetch(`http://127.0.0.1:8000/api/blog/${postId}`, {
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
                console.log('Operation successful:', data);
                location.reload(); 
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
        } else {
            console.error('Post id not specified.');
        }

        const popup = document.getElementById("boboEditPopup");
        popup.style.display = "none";
        clearBoboEditPopup();
    });

    function deleteBoboPost(button) {
        const postId = button.getAttribute('data-id');
        if (confirm('Are you sure you want to delete this post?')) {
            fetch(`http://127.0.0.1:8000/api/blog/${postId}`, {
                method: 'DELETE',
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Post deleted:', data);
                location.reload();
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
        }
    }
</script>
