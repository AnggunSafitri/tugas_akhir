

<li class="nav-item">
    <a href="{{ url($url) }}" class="nav-link @if($active) active @endif">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $label }}
        </p>
    </a>
</li>