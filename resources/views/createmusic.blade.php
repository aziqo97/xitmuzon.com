<x-header>
    @slot('title')
        Панел добавит музику!
    @endslot
    <div class="table-responsive">

        <div class="search-page">
            <h1 class="search-page__title">Добавить новый раздель</h1>
            <div class="searchtable" id="searchtable" name="searchtable">
                <table style="width:100%;">
                    <tbody>
                    <tr>
                        <td class="search">
                            <div style="margin:10px;">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" placeholder="Введите названение музику" name="name"
                                           class="textin"
                                           style="width:250px"><br><br>
                                    <input type="text" placeholder="Введите артист музику" name="artist"
                                           class="textin" style="width:250px"><br><br>
                                    <input type="file"  name="photo"
                                           class="textin"
                                           style="width:250px"><br><br>
                                    <select name="bolim" class="form-control">
                                        @foreach($category as $category)
                                        <option value="{{$category->id}}">{{ $category->name }}</option>
                                        @endforeach
                                    </select><br><br>
                                    <button type="submit" class="bbcodes">Добавить</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</x-header>
