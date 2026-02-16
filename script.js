function showPage(pageId, clickedLink) {
    // Hide all sections
    const sections = document.querySelectorAll(".section");
    sections.forEach(sec => sec.classList.remove("active"));

    // Show the selected section
    document.getElementById(pageId).classList.add("active");

    // Update nav active state
    const navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach(link => link.classList.remove("active"));

    clickedLink.classList.add("active");
}
