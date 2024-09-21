
<div class="form-wrapper">
    <h1 class="form-title">Edit Beginning</h1>
    <form id="edit-form" action="{{ route('update', ['id' => 1]) }}" method="POST">
        @csrf
        @method('POST')
        <div class="styled-div">
            <label for="p1" class="form-label">Field 1:</label>
            <input type="text" id="p1" name="p1" class="form-input">
            <button type="button" class="clear-btn" data-target="#p1">Clear</button><br><br>

            <label for="p2" class="form-label">Field 2:</label>
            <input type="text" id="p2" name="p2" class="form-input">
            <button type="button" class="clear-btn" data-target="#p2">Clear</button><br><br>

            <label for="p3" class="form-label">Field 3:</label>
            <input type="text" id="p3" name="p3" class="form-input">
            <button type="button" class="clear-btn" data-target="#p3">Clear</button><br><br>

            <input type="submit" value="Update" class="form-submit">
        </div>
    </form>
  

</div>



    <script>
       document.addEventListener('DOMContentLoaded', function() {
    fetch('http://127.0.0.1:8000/api/beginning')  
        .then(response => response.json())
        .then(data => {
            // alert(data.Beginning);
            if (data.status && data.Beginning) {
                document.getElementById('p1').placeholder = data.Beginning.p1 || '';
                document.getElementById('p2').placeholder = data.Beginning.p2 || '';
                document.getElementById('p3').placeholder = data.Beginning.p3 || '';
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});

    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const clearButtons = document.querySelectorAll('.clear-btn');
        
        clearButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetSelector = this.getAttribute('data-target');
                const targetInput = document.querySelector(targetSelector);
                
                if (targetInput) {
                    targetInput.value = 'deleted';
                }
            });
        });
    });
</script>













