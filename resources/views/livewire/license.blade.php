<div>
    <p class="text-secondary text-description">Your license is currently for <strong>{{ pluralize($teamSize, 'person', 'people')}}</strong>.</p>
    <input type="range" wire:model="teamSize" min="1" max="10" value="2" class="form-range">
    <h2 class="mt-3">Amount: {{ money($amount) }}</h2>
</div>
