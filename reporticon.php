<div class="floating-icon">
    <a class="float-align" href="admin-reports.php" title="Reports" id="floatingIconLink">
        <i class="fa-regular fa-folder-open iconn"></i>
        <span>REPORTS</span>
    </a>
</div>

<script>
    const floatingIconLink = document.getElementById("floatingIconLink");
    floatingIconLink.addEventListener("click", function(event) {
        event.preventDefault();
        const currentUrl = window.location.href;
        const newHref = floatingIconLink.href + "?currentUrl=" + encodeURIComponent(currentUrl);
        console.log("Redirecting to:", newHref);
        window.location.href = newHref;
    });
</script>