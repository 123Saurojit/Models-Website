<br>
<div>

    <p class="mb-2 ">Blog </p>

    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 400px;
            color: black;

        }
    </style>
    <textarea name="blog" id="editor" cols="30" rows="20">
            {{-- {{ old('blog') ?? $value }} --}}

            {!! old('blog') ?? $value !!}
    </textarea>
    <!--span class="input-group-text" id="basic-addon1" style="margin-left: 5px;">%</span-->
</div>