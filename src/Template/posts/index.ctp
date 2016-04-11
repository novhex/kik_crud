

<div class="col-md-12">
<div class="well">
    <?php if(!empty($posts)): foreach($posts as $post): ?>
     
          
                <h4><a href="javascript:void(0);"><?php echo $post->title; ?></a></h4>
                <p><?php echo $post->description; ?></p>
             
                <a href="<?php echo $this->kik->base_url('posts/edit/').$post->id; ?>" class="btn btn-success"> Edit </a>
                <a href="<?php echo $this->kik->base_url('posts/view/').$post->id; ?>" class="btn btn-success"> View </a>
                <a href="<?php echo $this->kik->base_url('posts/delete/').$post->id; ?>" class="btn btn-success"> Delete </a>
            
    
    <?php endforeach; else: ?>
    <p class="no-record">No post(s) found......</p>
    <?php endif; ?>
</div>
</div>