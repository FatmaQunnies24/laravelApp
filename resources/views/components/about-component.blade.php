<div class="form-container">
    <h1>Edit Information</h1>
    <form id="edit-form" method="POST" action="http://127.0.0.1:8000/api/about/1">
        @csrf

        <div class="form-row">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook">
            </div>

            <div class="form-group">
                <label for="pinterest">Pinterest</label>
                <input type="text" class="form-control" id="pinterest" name="pinterest">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="linkedin">LinkedIn</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin">
            </div>

            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input type="text" class="form-control" id="twitter" name="twitter">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
    <div id="success-message" style="display: none; color: green; margin-top: 10px;">تم تحديث البيانات بنجاح!</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('edit-form');
        const successMessage = document.getElementById('success-message');

        // Fetch existing data
        fetch('http://127.0.0.1:8000/api/about')
            .then(response => response.json())
            .then(data => {
                if (data.status && data.About.length > 0) {
                    const about = data.About[0];
                    document.getElementById('phone').value = about.phone;
                    document.getElementById('email').value = about.email;
                    document.getElementById('facebook').value = about.facebook;
                    document.getElementById('pinterest').value = about.pinterest;
                    document.getElementById('linkedin').value = about.linkedin;
                    document.getElementById('twitter').value = about.twitter;
                }
            })
            .catch(error => console.error('Error fetching data:', error));

        // Handle form submission
        form.addEventListener('submit', (event) => {
            event.preventDefault(); 

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update form values
                    document.getElementById('phone').value = formData.get('phone');
                    document.getElementById('email').value = formData.get('email');
                    document.getElementById('facebook').value = formData.get('facebook');
                    document.getElementById('pinterest').value = formData.get('pinterest');
                    document.getElementById('linkedin').value = formData.get('linkedin');
                    document.getElementById('twitter').value = formData.get('twitter');
                    
                    // Show success message
                    successMessage.style.display = 'block';
                } else {
                    console.error('Error updating data:', data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>
