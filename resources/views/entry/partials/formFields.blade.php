@include('blog-admin::forms.input', ['name' => 'title', 'controlAttributes' => ['required']])
@include('blog-admin::forms.input', ['name' => 'slug'])
@include('blog-admin::forms.input', ['name' => 'publish_after', 'type' => 'datetime-local'])
@include('blog-admin::forms.input', ['name' => 'author_name'])
@include('blog-admin::forms.input', ['name' => 'author_email'])
@include('blog-admin::forms.input', ['name' => 'author_url'])
@include('blog-admin::forms.textarea', ['name' => 'image'])
{{ $entry->getImage() }}
@include('blog-admin::forms.textarea', ['name' => 'content', 'controlAttributes' => ['required']])
@include('blog-admin::forms.textarea', ['name' => 'summary'])
@include('blog-admin::forms.input', ['name' => 'page_title'])
@include('blog-admin::forms.input', ['name' => 'description'])
@include('blog-admin::forms.textarea', ['name' => 'json_meta_tags'])
<pre>{{ $entry->getMetaTagBag()->toHtml() }}</pre>
