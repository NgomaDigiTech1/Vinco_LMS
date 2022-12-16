<tr class="nk-tb-item text-center">
    <td class="nk-tb-col">
        <span class="tb-lead">{{ $academic->id }}</span>
    </td>
    <td class="nk-tb-col">
        <span class="tb-lead">{{ $academic->start_date ?? "" }}</span>
    </td>
    <td class="nk-tb-col">
        <span class="tb-lead">{{ $academic->end_date ?? "" }}</span>
    </td>
    <td class="nk-tb-col">
        <span class="tb-lead">
            <div class="d-flex text-center">
                @can('role-edit')
                    <a href="{{ route('admins.academic.session.edit', $academic->id) }}" class="btn btn-dim btn-primary btn-sm ml-1">
                        <em class="icon ni ni-edit"></em>
                    </a>
                @endcan
                @can('role-delete')
                    <livewire:backend.sessions.delete-session :academic="$academic"/>
                @endcan
            </div>
        </span>
    </td>
</tr>
