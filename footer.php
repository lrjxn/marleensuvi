</main>
    <?php wp_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const menuLinks = document.querySelectorAll('.sidebar .menu-item-has-children > a');

  menuLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      const parent = this.parentElement;
      const submenu = parent.querySelector('.sub-menu');

      if (submenu && !parent.classList.contains('open')) {
        e.preventDefault();
        parent.classList.add('open');
      }
    });
  });
});
</script>

</body>
</html>