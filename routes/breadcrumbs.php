<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

Breadcrumbs::for('catalog', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Catalog Jongveksi');
});


Breadcrumbs::for('create.catalog', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Create Catalog');
});

Breadcrumbs::for('slider.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Slider Jongveksi');
});
Breadcrumbs::for('create_slider', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Create Slider Produk');
});

Breadcrumbs::for('delete.catalog', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Delete Catalog');
});


Breadcrumbs::for('produk', function (BreadcrumbTrail $trail) {
    $trail->push('Produk', route('produk.catalog'));
});

// Dashboard > Detail Produk 
Breadcrumbs::for('detail.produk', function (BreadcrumbTrail $trail) {
    $trail->parent('produk');
    $trail->push('Detail Produk');
});

// Dashboard > Detail Produk >> Category
Breadcrumbs::for('detail.produk.category', function ($trail, $product) {
    $trail->parent('detail.produk');               // Level 3
    $trail->push($product->name_produk, route('catalog.show', $product->id));
});
