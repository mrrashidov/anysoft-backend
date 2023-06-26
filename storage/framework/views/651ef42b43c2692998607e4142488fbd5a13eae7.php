<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['darkMode','tag','wire:click','href','tooltip','target','disabled','color','label','icon','size','dusk','class']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['darkMode','tag','wire:click','href','tooltip','target','disabled','color','label','icon','size','dusk','class']); ?>
<?php foreach (array_filter((['darkMode','tag','wire:click','href','tooltip','target','disabled','color','label','icon','size','dusk','class']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'forms::components.icon-button','data' => ['darkMode' => $darkMode,'tag' => $tag,'wire:click' => $wireClick,'href' => $href,'tooltip' => $tooltip,'target' => $target,'disabled' => $disabled,'color' => $color,'label' => $label,'icon' => $icon,'size' => $size,'dusk' => $dusk,'class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms::icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dark-mode' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($darkMode),'tag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tag),'wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wireClick),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($href),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tooltip),'target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($target),'disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disabled),'color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($color),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($size),'dusk' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($dusk),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /Users/asadbekfayzulloev/server/anysoft_pro/storage/framework/views/b0d014f2b3d01b3bdad801b470cf878cf1e087f4.blade.php ENDPATH**/ ?>