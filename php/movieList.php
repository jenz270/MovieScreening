 <?php
        include 'connectdb.php';
   ?>

 <form action="getMovieListByGenre.php" method="post">
             Genre: 
             <select name="genreList">
                    <option value="Comedy">Comedy</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Horror">Horror</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Documentary">Documentary</option>
              </select>
              <br>
        <input type="submit" value="genre">
        </form>