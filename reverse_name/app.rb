require 'sinatra'

def reverse_name(first_name, last_name)
  reversed_fn = ""
  (first_name.length - 1).downto(0) do |i|
    reversed_fn += first_name[i]
  end
  reversed_ln = ""
  (last_name.length - 1).downto(0) do |i|
    reversed_ln += last_name[i]
  end
  "#{reversed_fn} #{reversed_ln}"
end

get '/' do
  erb :index
end

post '/reverse' do
  first_name = params[:first_name]
  last_name = params[:last_name]
  @reversed_name = reverse_name(first_name, last_name)
  erb :reverse
end

