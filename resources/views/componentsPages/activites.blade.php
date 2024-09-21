  <div id="app">
    <div class="latest_activites_area">
      <div class="video_bg_1 video_activite d-flex align-items-center justify-content-center">
        <div id="video-frame"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="activites_info">
              <div class="section_title">
                <h3 id="activity-title">
                  <span></span><br>
                </h3>
              </div>
              <p id="activity-description" class="para_1">
              </p>
              <button class="but" id="edit-button">
                Edit
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="editModal" class="modal">
      <div class="modal-content">
        <h4>Edit Activity</h4>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="">

       

        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>

        <label for="videoUrl">Video URL</label>
        <input type="text" id="videoUrl" name="videoUrl" value="">

        <div class="modal-buttons">
          <button id="saveChanges">Save Changes</button>
          <button id="closeModal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      fetch("http://127.0.0.1:8000/api/activities")
        .then(response => response.json())
        .then(data => {
          console.log(data);

          if (data.Activities) {
            console.log("Activity title:", data.Activities[0].name);

            document.getElementById('activity-title').innerHTML = `<span>${data.Activities[0].name}</span><br>Activities`;
            document.getElementById('activity-description').innerHTML = data.Activities[0].desc;

            initYouTubePlayer(data.Activities[0].videoUrl);
          } else {
            console.error('No activity found or incorrect data structure.');
          }
        })
        .catch(error => {
          console.error('Error fetching activity data:', error);
        });
    });

    function initYouTubePlayer(videoUrl) {
      const url = new URL(videoUrl);
      const videoId = url.searchParams.get('v');

      new YT.Player('video-frame', {
        height: '360',
        width: '640',
        videoId: videoId,
        events: {
          'onReady': onPlayerReady
        }
      });
    }

    function onPlayerReady(event) {

    }

    document.getElementById('edit-button').addEventListener('click', function() {
      document.getElementById('editModal').style.display = 'block';
    });

    document.getElementById('closeModal').addEventListener('click', function() {
      document.getElementById('editModal').style.display = 'none';
    });

    document.getElementById('saveChanges').addEventListener('click', function() {
      document.getElementById('editModal').style.display = 'none';
    });
  </script>

<script>document.addEventListener('DOMContentLoaded', function () {
  const editButton = document.getElementById('edit-button');
  const editModal = document.getElementById('editModal');
  const closeModal = document.getElementById('closeModal');
  const saveChanges = document.getElementById('saveChanges');

  editButton.addEventListener('click', function () {
    editModal.style.display = 'block';
  });

  closeModal.addEventListener('click', function () {
    editModal.style.display = 'none';
  });

  window.addEventListener('click', function (event) {
    if (event.target === editModal) {
      editModal.style.display = 'none';
    }
  });

  saveChanges.addEventListener('click', function () {
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;
    const videoUrl = document.getElementById('videoUrl').value;

    console.log('Title:', title);
    console.log('Description:', description);
    console.log('Video URL:', videoUrl);

    fetch("http://127.0.0.1:8000/api/activities/1", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        name: title,
        desc: description,
        videoUrl: videoUrl
      })
    })
    .then(response => response.json())
    .then(data => {
      if (data.Activities && data.Activities.length > 0) {
        console.log("Activity title:", data.Activities[0].name);

        document.getElementById('activity-title').innerHTML = `<span>${data.Activities[0].name}</span><br>Activities`;
        document.getElementById('activity-description').innerHTML = data.Activities[0].desc;
        document.querySelector('iframe').src = data.Activities[0].videoUrl;
        editModal.style.display = 'none'; 
      } else {
        console.error('No activity found or incorrect data structure.');
      }
    })
    .catch(error => console.error('Error updating activity:', error));
  });

  fetch("http://127.0.0.1:8000/api/activities")
    .then(response => response.json())
    .then(data => {
      if (data.Activities && data.Activities.length > 0) {
        document.getElementById('title').value = data.Activities[0].name;
        document.getElementById('description').value = data.Activities[0].desc;
        document.getElementById('videoUrl').value = data.Activities[0].videoUrl;
      }
    })
    .catch(error => console.error('Error fetching data:', error));
});
</script>
 