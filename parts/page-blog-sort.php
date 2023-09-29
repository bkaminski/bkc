<div class="container-fluid text-center cat-select">
    <div class="container">
        <h3 class="text-dark pt-3 text-center text-uppercase" onChange="window.location.href=this.value">Select Topic</h3>
        <div class="col">
            <select id="bkcSelect" class="form-select form-select-lg shadow rounded-0" aria-label="Select Blog Topic">
                <option selected disabled>Choose Topic</option>
                <option value="<?php echo get_home_url(); ?>/web-development-blog">Development Blog</option>
                <option value="<?php echo get_home_url(); ?>/blog">All Blog Posts</option>
            </select>
        </div>
    </div>
</div>
<script>
    document.getElementById("bkcSelect").onchange = function() {
        if (this.selectedIndex !== 0) {
            window.location.href = this.value;
        }
    };
</script>

