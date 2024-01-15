<button class="scroll-to-top" onclick="scrollToTop()">↑</button>
    <script>
        // Function to scroll back to the top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Function to toggle the visibility of the scroll-to-top button
        function toggleScrollButton() {
            var scrollButton = document.querySelector('.scroll-to-top');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollButton.style.display = 'block';
            } else {
                scrollButton.style.display = 'none';
            }
        }

        // Event listener for scrolling to toggle the button visibility
        window.onscroll = function() {
            toggleScrollButton();
        };
    </script>