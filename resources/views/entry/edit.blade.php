@inject('view_manager', 'Kontenta\Kontour\Contracts\AdminViewManager')

@extends($view_manager->toolLayout())

@section($view_manager->toolHeaderSection())

@append

@section($view_manager->toolMainSection())
<form action="{{ route('blog-admin.entries.update', $entry->getKey()) }}" method="POST">
@method('PUT')
@csrf
@include('blog-admin::entry.partials.formFields')
</form>
@append