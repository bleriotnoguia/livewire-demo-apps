<div wire:poll.1s>
    <div>
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="row border border-dark rounded">
            <div class="col-md-4 border-dark border-end bg-white text-primary py-5 rounded-left">
                <strong class="h1 font-weight-bold">{{ $newOrders }}</strong>
                <h3 class="text-secondary">New Orders</h3>
            </div>
            <div class="col-md-4 border-dark border-end bg-white text-primary py-5 rounded-left">
                <strong class="h1 font-weight-bold">{{ $salesAmount }}</strong>
                <h3 class="text-secondary">Sales Amount</h3>
            </div>
            <div class="col-md-4 border-dark bg-white text-primary py-5 rounded-left">
                <strong class="h1 font-weight-bold">{{ $satisfactions }}%</strong>
                <h3 class="text-secondary">Satisfactions</h3>
            </div>
        </div>
    </div>
    
    <button class="btn btn-primary btn-lg mt-5" wire:click="$refresh">@ Refresh</button>
</div>