<x-layout>
    <x-slot name="title">Login Page</x-slot>
    <x-slot name=main>
        <div>
            <h1 id="heading" class="heading">User Login</h1>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <button onclick="changeColor()" type="button" class="btn btn-primary">Login</button>
            <button onclick="greenColor()" type="button" class="btn btn-secondary">Update color</button>

             
        </div>
    </x-slot>

</x-layout>
