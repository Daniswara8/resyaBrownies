@extends('admin.layout.layoutAdminLte')

@section('title')
    Daftar User
@endsection

@section('titleHeader')
    Daftar User
@endsection

@section('content')
    <style>
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
        }

        .container-fluid {
            max-width: 100% !important;
            width: 95% !important
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Jakarta</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Doe</td>
                                <td>jane@example.com</td>
                                <td>Bandung</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Budi Santoso</td>
                                <td>budi@example.com</td>
                                <td>Surabaya</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Siti Aminah</td>
                                <td>siti@example.com</td>
                                <td>Yogyakarta</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ahmad Zaki</td>
                                <td>ahmad@example.com</td>
                                <td>Medan</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Lina Kartini</td>
                                <td>lina@example.com</td>
                                <td>Bali</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>David Lee</td>
                                <td>david@example.com</td>
                                <td>Palembang</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Sarah Chen</td>
                                <td>sarah@example.com</td>
                                <td>Makassar</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Michael Brown</td>
                                <td>michael@example.com</td>
                                <td>Semarang</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Jessica Davis</td>
                                <td>jessica@example.com</td>
                                <td>Batam</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Kevin Wilson</td>
                                <td>kevin@example.com</td>
                                <td>Pekanbaru</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Ashley Garcia</td>
                                <td>ashley@example.com</td>
                                <td>Bogor</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>William Rodriguez</td>
                                <td>william@example.com</td>
                                <td>Depok</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Elizabeth Martinez</td>
                                <td>elizabeth@example.com</td>
                                <td>Tangerang</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Christopher Anderson</td>
                                <td>christopher@example.com</td>
                                <td>Bekasi</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Angela Taylor</td>
                                <td>angela@example.com</td>
                                <td>Malang</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Matthew Thomas</td>
                                <td>matthew@example.com</td>
                                <td>Padang</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Amanda Hernandez</td>
                                <td>amanda@example.com</td>
                                <td>Samarinda</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Joshua Moore</td>
                                <td>joshua@example.com</td>
                                <td>Balikpapan</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Brittany Jackson</td>
                                <td>brittany@example.com</td>
                                <td>Pontianak</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Daniel Martin</td>
                                <td>daniel@example.com</td>
                                <td>Manado</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Melissa White</td>
                                <td>melissa@example.com</td>
                                <td>Ambon</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Ryan Clark</td>
                                <td>ryan@example.com</td>
                                <td>Jayapura</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Lauren Lewis</td>
                                <td>lauren@example.com</td>
                                <td>Sorong</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Nicholas Baker</td>
                                <td>nicholas@example.com</td>
                                <td>Kendari</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Victoria Hall</td>
                                <td>victoria@example.com</td>
                                <td>Gorontalo</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Joseph Allen</td>
                                <td>joseph@example.com</td>
                                <td>Kupang</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Stephanie Young</td>
                                <td>stephanie@example.com</td>
                                <td>Mataram</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Justin King</td>
                                <td>justin@example.com</td>
                                <td>Banjarmasin</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Heather Wright</td>
                                <td>heather@example.com</td>
                                <td>Tarakan</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Eric Scott</td>
                                <td>eric@example.com</td>
                                <td>Ternate</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Nicole Green</td>
                                <td>nicole@example.com</td>
                                <td>Tidore</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Brandon Adams</td>
                                <td>brandon@example.com</td>
                                <td>Bau-Bau</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Amber Nelson</td>
                                <td>amber@example.com</td>
                                <td>Cilegon</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Patrick Carter</td>
                                <td>patrick@example.com</td>
                                <td>Serang</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Crystal Mitchell</td>
                                <td>crystal@example.com</td>
                                <td>Sukabumi</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Kyle Perez</td>
                                <td>kyle@example.com</td>
                                <td>Cimahi</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Tiffany Roberts</td>
                                <td>tiffany@example.com</td>
                                <td>Tasikmalaya</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Jordan Turner</td>
                                <td>jordan@example.com</td>
                                <td>Banjar</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Morgan Phillips</td>
                                <td>morgan@example.com</td>
                                <td>Probolinggo</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Hunter Campbell</td>
                                <td>hunter@example.com</td>
                                <td>Kediri</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Kayla Parker</td>
                                <td>kayla@example.com</td>
                                <td>Madiun</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Austin Evans</td>
                                <td>austin@example.com</td>
                                <td>Blitar</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Alexis Edwards</td>
                                <td>alexis@example.com</td>
                                <td>Mojokerto</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Tyler Collins</td>
                                <td>tyler@example.com</td>
                                <td>Pasuruan</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Mackenzie Stewart</td>
                                <td>mackenzie@example.com</td>
                                <td>Batu</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Cody Sanchez</td>
                                <td>cody@example.com</td>
                                <td>Salatiga</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Destiny Morris</td>
                                <td>destiny@example.com</td>
                                <td>Magelang</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Zachary Rogers</td>
                                <td>zachary@example.com</td>
                                <td>Surakarta</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Brooke Reed</td>
                                <td>brooke@example.com</td>
                                <td>Pekalongan</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
