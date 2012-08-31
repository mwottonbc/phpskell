# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'phpunit', :tests_path => 'test', :cli => '--colors' do
  # Watch tests files
  watch(%r{^.+Test\.php$})

  watch(%r{^src/(.+)\.php}) { |m| "Tests/#{m[1]}Test.php" }
end
