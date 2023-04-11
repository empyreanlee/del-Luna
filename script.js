        var modal = document.querySelector('.modal');
        var btn = document.querySelector('.modal-btn');        
        var span = document.querySelector('.close');        
        btn.onclick = function() {
          modal.style.display = "block";
        }
        span.onclick = function() {
          modal.style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }