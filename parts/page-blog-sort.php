<div class="container text-center">
    <h3 class="text-dark pt-5 text-center" onChange="window.location.href=this.value">Select Category</h3>
    <div class="col">
        <select id="bkcSelect" class="form-select form-select-lg" aria-label="Select Blog Category">
            <option selected disabled>Choose Category</option>
            <option value="<?php echo get_home_url(); ?>/web-development-blog">Development Blog</option>
            <option value="<?php echo get_home_url(); ?>/other-blog">Other Blog</option>
            <option value="<?php echo get_home_url(); ?>/blog">All Blog Posts</option>
        </select>
    </div>
</div>
<script>
    document.getElementById("bkcSelect").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };
</script>