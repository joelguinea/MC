<div>

    <div class="card shadow border border-light">
        <div class="card-header bg-danger">
            <h5 class="text-white text-center mt-2">Delete</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th style="border-right: 1px solid rgba(118, 116, 116, 0.67)">
                        Name
                    </th>
                    <td>
                        {{ $this->contact->name }}
                    </td>
                </tr>
                <tr>
                    <th style="border-right: 1px solid rgba(118, 116, 116, 0.67)">
                        Contact Number
                    </th>
                    <td>
                        {{ $this->contact->contact_number }}
                    </td>
                </tr>
                <tr>
                    <th style="border-right: 1px solid rgba(118, 116, 116, 0.67)">
                        Sim Card
                    </th>
                    <td>
                        {{ $this->contact->sim_card }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-info mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>

