<footer>
    <p>Created by 
    <?php $user =get_user_by("id","1");
    echo $user->user_login ?></p>
    <?php wp_footer();?>
</footer>
</body>
</html>