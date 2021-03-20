<div class="form-group">
                
    {!! Form::label('name', 'Name') !!}  
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Add Post Name']) !!}  

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
    
</div>

<div class="form-group">

    {!! Form::label('slug', 'Slug') !!}  
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Add Post Slug','readonly']) !!}  

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
    
</div>

<div class="form-group">

    {!! Form::label('category_id', 'Category') !!}  
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}  

    @error('category_id')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    <p class="font-weight-bold">Tags</p>

    @foreach ($tags as $tag)

        <label class="mr-2">

            {!! Form::checkbox('tags[]', $tag->id, null) !!}  
            {{$tag->name}}
        </label>
        
    @endforeach

    

    @error('tags')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    <p class="font-weight-bold">Status</p>

    <label class="mr-2">

        {!! Form::radio('status', 1, true) !!}
        Draft
    </label>

    <label>

        {!! Form::radio('status', 2) !!}
        Publish
    </label>

    @error('status')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">

            @isset($post->image)

                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">

            @else
                
                <img id="picture" src="https://cdn.pixabay.com/photo/2020/12/13/16/21/stork-5828727_960_720.jpg" alt="">

            @endisset

        </div>
    </div>

    <div class="col">

        <div class="form-group">

            {!! Form::label('file', 'Post Image') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror

        </div>


        <p> Instrucciones de la imagen ...</p>

    </div>
    
</div>

<div class="form-group">

    {!! Form::label('extract',  'Extract') !!}
    {!! Form::textarea('extract',null,  ['class' => 'form-control']) !!}

    @error('extract')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    {!! Form::label('body',  'Body') !!}
    {!! Form::textarea('body',null,  ['class' => 'form-control']) !!}

    @error('body')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>
