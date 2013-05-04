DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
find $DIR -type d -maxdepth 1 |while read D; do
  echo $PWD;
  cd $D;
  rm -r thumbs;
  mkdir thumbs;
  for i in $(ls *.{jpg,jpeg,JPG,JPEG,png,PNG}); do
    if [[ ! $i == t-* ]] ;
    then
#      rm -r thumbs;
      convert -scale 200 $i thumbs/t-$i;
    fi
  done
  cd ..;
done
