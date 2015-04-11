css_dir = '_/css'
sass_dir = '_/components/sass'
javascripts_dir = '_/js'
output_style = :compressed

require 'autoprefixer-rails'

on_stylesheet_saved do |file|
  css = File.read(file)
  File.open(file, 'w') do |io|
    io << AutoprefixerRails.process(css)
  end
end