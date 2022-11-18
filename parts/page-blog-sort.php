<div class="container text-center">
    <h3 class="text-dark pt-5 text-center">Sort Posts</h3>
    <div class="col">
        <?php if (is_archive()) { ?>
            <select name="sort-posts" id="sortbox" class="form-select form-select-lg shadow-lg" aria-label="Select Post Category" onchange="document.location.href='?'+this.options[this.selectedIndex].value;">
            <?php } else { ?>
                <select name="sort-posts" id="sortbox" class="form-select form-select-lg shadow-lg" aria-label="Select Post Category" onchange="document.location.href='?s<?php the_search_query(); ?>?cat=<?php echo $_GET['cat']; ?>&'+this.options[this.selectedIndex].value;">
                <?php } ?>
                <option selected disabled>Choose Category</option>
                <option value="orderby=date&order=desc">Newest</option>
                <option value="orderby=date&order=asc">Oldest</option>
                <option value="orderby=title&order=asc">Title A - Z</option>
                <option value="orderby=title&order=desc">Title Z - A</option>
                <option value="orderby=comment_count&order=desc">Most Comments</option>
                <option value="orderby=comment_count&order=asc">Least Comments</option>
                </select>
    </div>
    <p class="text-center text-dark pt-5">Viewing Sorted: <?php echo $_GET['orderby']; ?> <?php echo $_GET['order']; ?></p>
</div>