<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>{{ trans('back/users.name') }}</th>
                <th>{{ trans('back/users.role') }}</th>
                <th>{{ trans('back/users.seen') }}</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          @include('back.users.table')
    </tbody>
    </table>
</div>