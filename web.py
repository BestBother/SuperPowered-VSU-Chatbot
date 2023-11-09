import openai
import gradio

openai.api_key = "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"
messages = [{"role": "system", "content": "I have taken programming 1 and pre calc this semster; with this informantion ask me about course feedback about both classes, 5 question's each by please ask the question"}]

def CustomChatGPT(user_input):
    messages.append({"role": "user", "content": user_input})
    response = openai.ChatCompletion.create(
        model = "gpt-3.5-turbo",
        messages = messages
    )
    ChatGPT_reply = response["choices"][0]["message"]["content"]
    messages.append({"role": "assistant", "content": ChatGPT_reply})
    return ChatGPT_reply

demo = gradio.Interface(fn=CustomChatGPT, inputs = "text", outputs = "text", title = "SUPERPOWERED VSU CHATBOT")

demo.launch(share=True)