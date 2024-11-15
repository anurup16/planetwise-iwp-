document.addEventListener('DOMContentLoaded', function() {
    const courseHeaders = document.querySelectorAll('.course-header');

    courseHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const courseContent = this.nextElementSibling;
            const expandBtn = this.querySelector('.expand-btn');

            if (courseContent.style.display === 'block') {
                courseContent.style.display = 'none';
                expandBtn.textContent = '▶';
            } else {
                courseContent.style.display = 'block';
                expandBtn.textContent = '▼';
            }
        });
    });
});
