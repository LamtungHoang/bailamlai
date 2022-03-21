<table border="1">
       <thead>
              <tr>
                     <th>id</th>
                     <th>title</th>
                     <th>content</th>
              </tr>
       </thead>
       <tbody>
              @foreach ($posts as $post)
                  <tr>
                         <td>{{$post->id}}</td>
                         <td>{{$post->title}}</td>
                         <td>{{$post->content}}</td>
                  </tr>
              @endforeach
       </tbody>
</table>