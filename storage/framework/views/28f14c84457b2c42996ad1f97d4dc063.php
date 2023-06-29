




<?php if (isset($component)) { $__componentOriginal4f019d6ec44d6d76c82faa2252f84a76 = $component; } ?>
<?php $component = App\View\Components\LiveMusaTemplate::resolve(['name' => 'Componenti','age' => 'venti'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('live-musa-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\LiveMusaTemplate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<form action="#">

    <?php echo csrf_field(); ?>

    <input type="checkbox" name="t1" >
    <select name="test" id="1">
        <option >0</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
    </select>
</form>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f019d6ec44d6d76c82faa2252f84a76)): ?>
<?php $component = $__componentOriginal4f019d6ec44d6d76c82faa2252f84a76; ?>
<?php unset($__componentOriginal4f019d6ec44d6d76c82faa2252f84a76); ?>
<?php endif; ?>
<?php /**PATH C:\code\laravel\example\resources\views/lecturers/engineering/live-example.blade.php ENDPATH**/ ?>