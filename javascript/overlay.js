window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
      const modal = document.getElementById('successModal');
      modal.style.display = 'flex';

    }
  };
  
  window.onclick = function(event) {
    const modal = document.getElementById('successModal');
    if (event.target == modal) {
      modal.style.display = 'none';
      const newUrl = window.location.pathname + window.location.search.replace(/(\?|&)success=true/, '').replace(/^&/, '?');
        history.replaceState(null, '', newUrl);
    }
  };
  