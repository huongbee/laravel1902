<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>About page</h3>
    <h2>
        
        Địa chỉ: <?php echo e($address); ?>

    </h2>
    <?php
    // $a = 'sinhvien';
    // $$a <=> $sinhvien
    // print_r($person);
    foreach ($person as $value) {
        echo $value['name'];
        echo "<br>";
    }
    ?>

    <?php $__currentLoopData = $person; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($value['name']); ?>

        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php foreach($person as $value):?>
        <?=$value['name']?>
        <br>
    <?php endforeach?>

    <?php if(1<2): ?> Một bé hơn hai
    <?php else: ?> Một không bé hơn hai
    <?php endif; ?>


</body>
</html>