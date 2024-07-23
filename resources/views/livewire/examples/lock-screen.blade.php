

<main style="display: flex; align-items: center; justify-content: center">
    <title>Volt Laravel Dashboard - Lock</title>
                        <div class="container">
                            <h2>Lock Screen</h2>
                            {{-- form --}}
                            <form action="{{ route('unlock') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="password">Enter Password</label>
                                    <input type="password" placeholder="Password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="d-grid mt-5">
                                    <button type="submit" class="btn btn-gray-800">Unlock</button>
                                </div>
                            </form>
                        </div>
</main>
