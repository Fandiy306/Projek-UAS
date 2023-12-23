function confirmLogout() {
    var confirmLogout = confirm("Apakah Anda yakin ingin keluar?");
    if (confirmLogout) {
        window.location.href = "?logout=true";
    }
}
