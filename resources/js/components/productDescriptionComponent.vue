<template>
    <div class="product-description grid grid-cols-2 mt-4 py-6 w-full md:w-2/3 mx-auto">
        <div @click="productDescription()" :class="[productDescriptionContent ? 'active':'not-active', 'py-3', 'md:px-8 px-4']">
            Product Description
        </div>
        <div @click="buyAndReturnPolicy()" :class="[buyAndReturnPolicyContent ? 'active':'not-active', 'py-3', 'md:px-8 px-4']">
            Buy and return policy
        </div>
        <!-- <div @click="commentAndReview()" :class="[commentAndReviewContent ? 'active':'not-active', 'py-3', 'md:px-8 px-4']">
            Reviews and Comments
        </div> -->
    </div>
    <div v-show="productDescriptionContent" class="w-full md:w-2/3 mx-auto text-left relative -top-5 p-4 border-1 shadow">
        {{ productdetails }}
    </div>
    <div v-show="buyAndReturnPolicyContent" class="w-full md:w-2/3 mx-auto text-left relative -top-5 p-4 border-1 shadow">
        <div>Our policy lasts 30 days. If 30 days have gone by since your purchase, unfortunately we can't offer you a refund or exchange.</div><div><br></div><div>To be eligible for a return, your item must be unused and in the same condition that you received it. It must also be in the original packaging.</div><div><br></div><div>Several types of goods are exempt from being returned. Perishable goods such as food, flowers, newspapers or magazines cannot be returned. We also do not accept products that are intimate or sanitary goods, hazardous materials, or flammable liquids or gases.</div><div><br></div><div>Additional non-returnable items:</div><div>* Gift cards</div><div>* Downloadable software products</div><div>* Some health and personal care items</div><div><br></div><div>To complete your return, we require a receipt or proof of purchase.</div><div><br></div><div>Please do not send your purchase back to the manufacturer.</div><div><br></div><div>There are certain situations where only partial refunds are granted: (if applicable)</div><div>* Book with obvious signs of use</div><div>* CD, DVD, VHS tape, software, video game, cassette tape, or vinyl record that has been opened.</div><div>* Any item not in its original condition, is damaged or missing parts for reasons not due to our error.</div><div>* Any item that is returned more than 30 days after delivery</div><div><br></div><div>Refunds (if applicable)</div><div>Once your return is received and inspected, we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund.</div><div>If you are approved, then your refund will be processed, and a credit will automatically be applied to your credit card or original method of payment, within a certain amount of days.</div><div><br></div><div>Late or missing refunds (if applicable)</div><div>If you haven’t received a refund yet, first check your bank account again.</div><div>Then contact your credit card company, it may take some time before your refund is officially posted.</div><div>Next contact your bank. There is often some processing time before a refund is posted.</div><div>If you’ve done all of this and you still have not received your refund yet, please contact us at reversal@kahioja.com.</div><div><br></div><div>Sale items (if applicable)</div><div>Only regular priced items may be refunded, unfortunately sale items cannot be refunded.</div><div><br></div><div>Exchanges (if applicable)</div><div>We only replace items if they are defective or damaged.&nbsp; If you need to exchange it for the same item, send us an email at replace@kahioja.com and send your item to: suite A1/A2 Hamisu Abba Sumaila plaza, Tarauni market rd. Tarauni, Kano., kano, KN, 700223, Nigeria.</div><div><br></div><div><br></div><div>Shipping</div><div>To return your product, you should mail your product to: suite A1/A2 Hamisu Abba Sumaila plaza, Tarauni market rd. Tarauni, Kano., kano, KN, 700223, Nigeria.</div><div><br></div><div>You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be deducted from your refund.</div><div><br></div><div>Depending on where you live, the time it may take for your exchanged product to reach you, may vary.</div><div><br></div><div>If you are shipping an item over $75/NGN30,000, you should consider using a trackable shipping service or purchasing shipping insurance. We don’t guarantee that we will receive your returned item.</div>
    </div>
    <!-- <div v-show="commentAndReviewContent" class="w-full md:w-2/3 mx-auto relative -top-5 p-4 border-1 shadow">
        <div>Comment Our policy lasts 30 days. If 30 days have gone by since your purchase, unfortunately we can’t offer you a refund or exchange.</div><div><br></div><div>To be eligible for a return, your item must be unused and in the same condition that you received it. It must also be in the original packaging.</div><div><br></div><div>Several types of goods are exempt from being returned. Perishable goods such as food, flowers, newspapers or magazines cannot be returned. We also do not accept products that are intimate or sanitary goods, hazardous materials, or flammable liquids or gases.</div><div><br></div><div>Additional non-returnable items:</div><div>* Gift cards</div><div>* Downloadable software products</div><div>* Some health and personal care items</div><div><br></div><div>To complete your return, we require a receipt or proof of purchase.</div><div><br></div><div>Please do not send your purchase back to the manufacturer.</div><div><br></div><div>There are certain situations where only partial refunds are granted: (if applicable)</div><div>* Book with obvious signs of use</div><div>* CD, DVD, VHS tape, software, video game, cassette tape, or vinyl record that has been opened.</div><div>* Any item not in its original condition, is damaged or missing parts for reasons not due to our error.</div><div>* Any item that is returned more than 30 days after delivery</div><div><br></div><div>Refunds (if applicable)</div><div>Once your return is received and inspected, we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund.</div><div>If you are approved, then your refund will be processed, and a credit will automatically be applied to your credit card or original method of payment, within a certain amount of days.</div><div><br></div><div>Late or missing refunds (if applicable)</div><div>If you haven’t received a refund yet, first check your bank account again.</div><div>Then contact your credit card company, it may take some time before your refund is officially posted.</div><div>Next contact your bank. There is often some processing time before a refund is posted.</div><div>If you’ve done all of this and you still have not received your refund yet, please contact us at reversal@kahioja.com.</div><div><br></div><div>Sale items (if applicable)</div><div>Only regular priced items may be refunded, unfortunately sale items cannot be refunded.</div><div><br></div><div>Exchanges (if applicable)</div><div>We only replace items if they are defective or damaged.&nbsp; If you need to exchange it for the same item, send us an email at replace@kahioja.com and send your item to: suite A1/A2 Hamisu Abba Sumaila plaza, Tarauni market rd. Tarauni, Kano., kano, KN, 700223, Nigeria.</div><div><br></div><div><br></div><div>Shipping</div><div>To return your product, you should mail your product to: suite A1/A2 Hamisu Abba Sumaila plaza, Tarauni market rd. Tarauni, Kano., kano, KN, 700223, Nigeria.</div><div><br></div><div>You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be deducted from your refund.</div><div><br></div><div>Depending on where you live, the time it may take for your exchanged product to reach you, may vary.</div><div><br></div><div>If you are shipping an item over $75/NGN30,000, you should consider using a trackable shipping service or purchasing shipping insurance. We don’t guarantee that we will receive your returned item.</div>
    </div> -->
</template>

<script>
export default {
    name: 'ProductDescription',
    props:[
        'productdetails'
    ],
    data(){
        return{
            productDescriptionContent: true,
            buyAndReturnPolicyContent: false,
            commentAndReviewContent: false
        }
    },
    methods:{
        productDescription(){
            this.productDescriptionContent = true 
            this.buyAndReturnPolicyContent = false
            this.commentAndReviewContent = false
        },
        buyAndReturnPolicy(){
            this.buyAndReturnPolicyContent = true
            this.productDescriptionContent = false 
            this.commentAndReviewContent = false
        },
        commentAndReview(){
            this.commentAndReviewContent = true
            this.buyAndReturnPolicyContent = false
            this.productDescriptionContent = false 
        }
    }
}
</script>