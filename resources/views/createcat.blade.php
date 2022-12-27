<x-header>
    @slot('title')
        Панел создание категории!
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
                                <form action="" method="post">
                                    @csrf
                                    <input type="text" placeholder="Введите названение каталога" name="category" class="textin"
                                           style="width:250px"><br><br>
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
