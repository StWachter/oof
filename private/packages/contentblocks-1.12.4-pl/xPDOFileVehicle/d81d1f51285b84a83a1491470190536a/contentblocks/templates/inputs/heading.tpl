<div class="contentblocks-field contentblocks-field-heading">
    <div class="contentblocks-field-actions"></div>

    <label for="{%=o.generated_id%}_input">{%=o.name%}</label>
    {% if (o.content_desc) { %}
    <p class="content-field-description">{%=o.content_desc%}</p>
    {% } %}
    <div class="contentblocks-field-select contentblocks-field-heading-level">
        <select></select>
    </div>
    <div class="contentblocks-field-input contentblocks-field-heading-input">
        <input type="text" value="{%=o.value%}" id="{%=o.generated_id%}_input">
    </div>
</div>
