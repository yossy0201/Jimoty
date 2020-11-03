<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?$this->Form->create($entity,
  ['type'=>'post',
  'url'=>'controller'=>'people',
      'action'=>'create']]) ?>
    
  <?=$this->Form->text('rogin')?>
  <?=$this->Form->text('register')?>

</body>
</html>