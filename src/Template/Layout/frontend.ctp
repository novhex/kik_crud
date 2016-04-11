<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('head') ?>
</head>
<body>
    <?= $this->element('header') ?>
    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">
        <div class="row">
        <?= $this->Flash->render() ?>
        
            <?= $this->fetch('content') ?>
           
    </div>
    </div>
    <?= $this->element('footer') ?>
</body>
</html>