@include('back.partials.treeview', [
  'icon' => 'user',
  'type' => 'user',
  'items' => [
    [
      'route' => route('users.index'),
      'command' => 'list',
      'color' => 'blue',
    ],
    [
      'route' => route('users.index', ['new' => 'on']),
      'command' => 'new',
      'color' => 'yellow',
    ],
  ],
])