<div>
    <a href="{{ route('dataAdmin.edit', ['id' => $id]) }}" class="btn btn-warning">
        <i class="bx bx-edit text-white"></i>
    </a>
    <form action="{{ route('superAdminController.destroy', ['superAdminController' => $id]) }}" method="POST"
        class="delete-form" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn btn-danger btn-outline-dark  me-2 btn-delete"
            data-name="{{ $name }}">
            <i class="bx bx-trash text-white"></i>
        </button>
    </form>
</div>
