<div>
    <x-header title="Usuários" separator />
    <x-table :headers="$this->headers" :rows="$this->users">
        @scope('cell_permissions', $user)
            @foreach($user->permissions as $permission)
                <x-badge :value="$permission->key" class="badge-primary" />
            @endforeach
        @endscope

        @scope('actions', $users)
            <x-button wire:click="delete({{ $users->id }})" icon="o-trash" class="btn-sm" spinner />
        @endscope
    </x-table>
</div>
