# Skeleton Bundle

ElyanorSkeletonBundle was created to serve as a skeleton for a symfony bundle.

## Installation

### Step 1: Download the Bundle

```
composer require elyanor/skeleton-bundle
```

This command requires you to have Composer installed globally, as explained in the Composer documentation.

### Step 2: Enable the Bundle

``` php
<?php
// config/bundles.php
return [
    // ...
    Elyanor\Bundle\SkeletonBundle\ElyanorSkeletonBundle::class => ['all' => true],
];
```

### Step 3: Configure this bundle (it's just an example)

``` yaml
# Create config/elyanor_skeleton.yaml and copy past this:

elyanor_skeleton:
    argument_1: ''
    argument_2: ''
```
