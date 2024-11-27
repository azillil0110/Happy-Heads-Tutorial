function toggleOverlay() {
    const overlay = document.getElementById('scheduleOverlay');
    if (overlay.style.display === 'none') {
        overlay.style.display = 'flex';
    } else {
        overlay.style.display = 'none';
    }
}